# Evaluation Scenarios

1. What services does ITMB provide?

2. How does pricing work?

3. What products has ITMB developed?

4. Can ITMB build custom software?

5. What should happen if information is not available in the knowledge base?

## Evaluation Update

Test scenarios remain unchanged.

However, system readiness is now aligned with implementation phase.

Focus of upcoming implementation:
- Retrieval correctness
- Context quality
- AI response grounding

## Evaluation Update - Retrieval Layer

The system can now be evaluated at retrieval level.

### Test 1
What services does ITMB provide?

Expected:
Relevant sections from company documents should be returned.

---

### Test 2
What is the pricing model?

Expected:
System should retrieve pricing-related document sections.

---

### Test 3
If query is unrelated to documents:

Expected:
System should return low-relevance or empty context.

## Evaluation Update - AI Integration

The system is now fully testable end-to-end.

---

### Test 1
What services does ITMB provide?

Expected:
AI should answer using retrieved context only.

---

### Test 2
Explain pricing model.

Expected:
AI should generate structured explanation based on docs.

---

### Test 3
What is Laravel?

Expected:
If not in context, AI should NOT hallucinate and should respond with limited knowledge behavior.

## Evaluation Update - Memory System

The system is now tested for multi-turn conversations.

---

### Test 1
User: What services does ITMB provide?

User: Explain pricing

User: Can you repeat the services?

Expected:
System should maintain context and understand "repeat" refers to previous answer.

---

### Test 2
User: Tell me about ITMB
User: What about pricing?

Expected:
System should maintain company context across questions.

---

### Test 3
User: random question
User: follow-up question referring to previous answer

Expected:
System should correctly resolve references using memory.

## Final Evaluation Scenarios

The system is evaluated end-to-end through UI.

---

### Test 1 - Knowledge Accuracy
Q: What services does ITMB provide?

Expected:
Accurate response based on retrieved documents.

---

### Test 2 - Multi-turn Conversation
Q1: Tell me about ITMB  
Q2: What about pricing?

Expected:
System should maintain context across UI interactions.

---

### Test 3 - Unknown Query Handling
Q: What is quantum computing?

Expected:
System should avoid hallucination and respond based on knowledge base limitations.

---

### Test 4 - UI Interaction
User interacts via web interface

Expected:
Smooth chat experience with consistent responses.

---

### Test 5 - Memory Validation
User refers to previous question

Expected:
System correctly resolves context from session memory.

## Future Evaluation Areas

The current evaluation focuses on correctness and memory.

Future evaluations should include:

- Retrieval relevance scoring
- Hallucination rate measurement
- Context utilization accuracy
- Multi-turn conversation consistency
- Response latency
- Knowledge coverage
