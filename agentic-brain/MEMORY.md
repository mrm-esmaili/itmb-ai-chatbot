# Memory

Project Initialization Notes

Decision:
Build the project using Laravel.

Reason:
Opportunity to follow a modern architecture and refresh Laravel knowledge.

Decision:
Use company data from ITMB instead of fictional data.

Reason:
The resulting system can be reused as a real business tool after the assessment.

Decision:
Use an AI provider API instead of rule-based responses.

Reason:
Demonstrates real-world AI integration and context management.

Current Status:
Planning phase completed.
Development has not started yet.

## Memory Update - Development Start

Decision:
Laravel project has been initialized as the core framework.

Reason:
Provides structured architecture for scaling AI components.

Observation:
Transitioning from design to implementation requires strict separation of services to avoid tightly coupled logic.

Insight:
Early architectural decisions will significantly affect AI system maintainability.

## Memory Update - Retrieval Implementation

Decision:
Implemented file-based retrieval system using Markdown documents.

Reason:
Fast, transparent, and easy to debug during MVP phase.

Observation:
Retrieval quality directly impacts AI response quality.

Insight:
Even without AI integration, retrieval system defines final answer quality.

Limitation Identified:
Keyword-based matching is not semantically accurate.

Future Improvement:
- Embedding-based retrieval
- Semantic ranking
- Chunk-based document processing
